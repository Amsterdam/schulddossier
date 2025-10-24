/**
 * @license EUPL-1.2+
 * Copyright Gemeente Amsterdam
 */

import type { HTMLAttributes, PropsWithChildren } from "react";

import clsx from "clsx";

import { useAppLayoutContext } from "../AppLayout/AppLayoutContext";
import { AppNavigationLink } from "./AppNavigationLink";
import "./AppNavigation.css";
import { AppNavigationMenu } from "./AppNavigationMenu";

export type AppNavigationProps = {
  readonly expanded?: boolean
} & PropsWithChildren<HTMLAttributes<HTMLElement>>;

export const AppNavigationRoot = ({ children, className, expanded, ...restProps }: AppNavigationProps) => {
  const { appNavigationOpen } = useAppLayoutContext();

  return (
    <nav
      {...restProps}
      className={clsx(
        "ams-app-navigation",
        appNavigationOpen && "ams-app-navigation--open",
        expanded && "ams-app-navigation--expanded",
        className,
      )}
    >
      <ol className="ams-app-navigation__menu">{children}</ol>
    </nav>
  );
};

AppNavigationRoot.displayName = "AppNavigation";

export const AppNavigation = Object.assign(AppNavigationRoot, {
  Link: AppNavigationLink,
  Menu: AppNavigationMenu,
});
